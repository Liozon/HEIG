package projetcafétéria;

import java.util.ArrayList;

public class BoiteAService {

    private final ArrayList<Service> SERVICES;

    public BoiteAService() {
        SERVICES = new ArrayList<>();
    }

    public boolean ajoute(Service service) {
        boolean aEteAjoute = false;
        if (service != null && !this.SERVICES.contains(service)) {
            aEteAjoute = this.SERVICES.add(service);
        }
        return aEteAjoute;
    }

    public Service rendService() {
        Service service = null;
        if (!this.SERVICES.isEmpty()) {
            return SERVICES.remove(this.SERVICES.size() - 1);
        }
        return service;
    }

}
