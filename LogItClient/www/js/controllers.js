angular.module('LogIt.controllers', [])

.controller('LogsCtrl', function($scope, $http, $httpParamSerializerJQLike) {
	  // With the new view caching in Ionic, Controllers are only called
	  // when they are recreated or on app start, instead of every page change.
	  // To listen for when this page is active (for example, to refresh data),
	  // listen for the $ionicView.enter event:
	  //
	  //$scope.$on('$ionicView.enter', function(e) {
	  //});
	  $http.get('http://logit').then(function(resp) {
		  $scope.logs = resp.data;
	  });
	  
	  $scope.addLog = function (log) {
		  var d = new Date();
		  log.time = d.toJSON(); 
		  $http({
		      method: 'POST',
		      url: 'http://logit/add',
		      data: $httpParamSerializerJQLike(log),
		      headers: {'Content-Type': 'application/x-www-form-urlencoded'},
		    }).then(function(resp) {
			  console.log(resp);
		  }, function(reason) {
			  console.log(reason);
		  });
	  }
	})

.controller('ChatsCtrl', function($scope, Chats) {
  // With the new view caching in Ionic, Controllers are only called
  // when they are recreated or on app start, instead of every page change.
  // To listen for when this page is active (for example, to refresh data),
  // listen for the $ionicView.enter event:
  //
  //$scope.$on('$ionicView.enter', function(e) {
  //});

  $scope.chats = Chats.all();
  $scope.remove = function(chat) {
    Chats.remove(chat);
  };
})

.controller('ChatDetailCtrl', function($scope, $stateParams, Chats) {
  $scope.chat = Chats.get($stateParams.chatId);
})

.controller('AccountCtrl', function($scope) {
  $scope.settings = {
    enableFriends: true
  };
});
