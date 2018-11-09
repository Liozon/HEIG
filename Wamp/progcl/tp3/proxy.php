<?php
$webServiceHoraire = "http://services.heig-vd.ch/ComemSchedule/ScheduleService.ashx/GetSchedule?CourseId=";
$cours = $_GET['cours'];
echo file_get_contents($webServiceHoraire . $cours);