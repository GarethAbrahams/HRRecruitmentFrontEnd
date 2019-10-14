<?php

require_once 'C:\xampp\htdocs\ADP_RecruitmentApp\APIClient.php';

class applicantMethods {
	
	var $BASE_URL;
	var $apiClient;
	
	function __construct() {
		$this->BASE_URL = 'http://localhost:8080/applicant/';
		$this->apiClient = new APIClient();
	}
	
	function findall(){
		return $this->apiClient->call('GET', $this->BASE_URL.'read/all');
	}
	
	function find($id) {
		return $this->apiClient->call('GET', $this->BASE_URL.'read/'.$id);
	}
	
	function create($applicant = array()) {
		return $this->apiClient->call('POST', $this->BASE_URL.'create',$applicant);
	}

	function update($applicant = array()) {
		return $this->apiClient->call('PUT', $this->BASE_URL.'create', $applicant);
	}

	function delete($id) {
		return $this->apiClient->call('DELETE', $this->BASE_URL.'delete/'.$id);
	}
}
?>
