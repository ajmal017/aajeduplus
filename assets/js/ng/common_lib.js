angular.module("MyApp", []).controller("MyController", function($scope,$http) {
    $scope.save_contact = function()
    {
        save_contact_success_cb = function(data)
        {
            if(data.status == "success")
            {
                $scope.contact_name = '';
                $scope.contact_email = '';
                $scope.contact_mobile = '';
                $scope.contact_enquiry = '';
                if(!$scope.$$phase) $scope.$apply();
                alert_box("Enquiry sent");
            }else if(data.status == 'failed')
            {
                alert_box(data.message);
            }
        }
        request_data = {}
        request_data['name'] = $scope.contact_name;
        request_data['email'] = $scope.contact_email;
        request_data['mobile'] = $scope.contact_mobile;
        request_data['enquiry'] = $scope.contact_enquiry;
        
        SSK.site_call("AJAX",window._site_url+"contact_us/save_contact",request_data, save_contact_success_cb);
    }
});