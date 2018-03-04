angular.module("MyApp", []).controller("MyController", function($scope,$http) {
    $scope.deleteUserPackageRequest = function(user_package_id)
    {
        if(confirm("Do you want to delete this User Package Request?"))
        {
            deleteUserPackageRequest_success_cb = function(data)
            {
                if(data.status == "success")
                {
                    $('#user-package-id-'+user_package_id).remove();
                }
            }
            SSK.site_call("AJAX",window._site_url+"admin_user_packages/deleteUserPackageRequest",{"user_package_id":user_package_id}, deleteUserPackageRequest_success_cb);
        }
    }

    $scope.open_user_package_request_modal = function(user_package_id,userid)
    {
        $scope.user_package_id=user_package_id;
        $scope.userid=userid;
        $("#user_package_request_accept").modal();
    }

    $scope.request_accept = function()
    {
        if(confirm("Do you want to accept this User Package Request?"))
        {
            var success_cb = function(data)
            {
                if(data.status == "success")
                {
                    $('#user-package-id-'+user_package_id).remove();
                    $("#user_package_request_accept").modal('hide');
                }
            }
            var user_package_id = $scope.user_package_id || 0;
            var userid = $scope.userid || 0;
            var amount = $scope.amount || 0;
            var months = $scope.months || 0;
            if(amount == 0)
            {
                alert('Please enter amount');
                return false;
            }else if(months == 0)
            {
                alert('Please enter months');
                return false;
            }

            var request_data = {};
            request_data["user_package_id"]=user_package_id;
            request_data["userid"] = userid;
            request_data["amount"] = amount;
            request_data["months"] = months;

            SSK.site_call("AJAX",window._site_url+"admin_user_packages/userPackageRequestAction",request_data,success_cb);
        }
    }
});