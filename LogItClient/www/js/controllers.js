angular.module('LogIt.controllers', [])

.controller('LogsCtrl', function($scope, $http) {
	  // With the new view caching in Ionic, Controllers are only called
	  // when they are recreated or on app start, instead of every page change.
	  // To listen for when this page is active (for example, to refresh data),
	  // listen for the $ionicView.enter event:
	  //
	  //$scope.$on('$ionicView.enter', function(e) {
	  //});
//	$scope.logs = [{
//	    content: 'uploading now'
//	  }, {
//	    content: 'compiling LogIt app'
//	  }, { 
//	    content: 'modifying, will it work?'
//	  }];
	  $http.get('http://logit').then(function(resp) {
		  $scope.logs = resp.data;
	  });
//	  $scope.remove = function(log) {
//		  Logs.remove(log);
//	  };
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
