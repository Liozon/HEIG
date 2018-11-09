<?php

define('CONTACTBOOK_ROOTPATH', '../');

require_once(CONTACTBOOK_ROOTPATH . 'config/contactBook.php');
require_once(CONTACTBOOK_ROOTPATH . CONTACTBOOK_SMARTY_DIR . 'Smarty.class.php');
require_once('Contact.php');
require_once('ContactManager.php');
class ContactBook {

    protected $contactManager;

    protected $smarty;

    public function __construct() {
        $this->contactManager = new ContactManager(CONTACTBOOK_DB_DSN, CONTACTBOOK_USERNAME, CONTACTBOOK_PASSWORD);

        $tplDir = CONTACTBOOK_ROOTPATH . CONTACTBOOK_TPL_DIR;
        $tplcDir = CONTACTBOOK_ROOTPATH . CONTACTBOOK_TPLC_DIR;
        $this->smarty = new Smarty;
        $this->smarty->template_dir = $tplDir;
        $this->smarty->compile_dir = $tplcDir;
    }

    protected function showContacts() {
        $contacts = $this->contactManager->getAll();
        $this->smarty->assign('contacts', $contacts);
        $this->smarty->assign('nombre_enregistrements', count($contacts));
        $this->smarty->display('show.tpl');
    }

    protected function showSearchForm() {
        $this->smarty->display('searchForm.tpl');
    }


    protected function showSearchResults() {
        $tri = $_POST['tri'];
        $nom = $_POST['str'];
        $contacts = $this->contactManager->searchByNom($nom, $tri);
        $this->smarty->assign('contacts', $contacts);
        $this->smarty->assign('nombre_enregistrements', count($contacts));
        $this->smarty->display('searchResults.tpl');
    }

    protected function showAddForm() {
        $this->smarty->display('addForm.tpl');
    }

    protected function doAdd() {
        $contactArray = array();
        $contactArray['titre'] = $_POST['titre'];
        $contactArray['nom'] = $_POST['nom'];
        $contactArray['prenom'] = $_POST['prenom'];
        $contactArray['adresse'] = $_POST['adresse'];
        $contactArray['npa'] = $_POST['npa'];
        $contactArray['email'] = $_POST['email'];
        $contactArray['ville'] = $_POST['ville'];
        $contactArray['telephone'] = $_POST['telephone'];
        $contactArray['mobile'] = $_POST['mobile'];
        $contactArray['commentaire'] = $_POST['commentaire'];
        $contact = new Contact($contactArray);
        $this->contactManager->add($contact);
    }


    public function main() {
        switch($_REQUEST['action']) {
            case 'chercher':
                $this->showSearchForm();
            break;

            case 'afficherResultatsRecherche':
                $this->showSearchResults();
            break;

            case 'ajouter':
                $this->showAddForm();
            break;

            case 'ajouterDB':
                $this->doAdd();
                $this->showContacts();
            break;

            default:
            case 'afficher':
                $this->showContacts();
            break;
        }
    }
}

?>
