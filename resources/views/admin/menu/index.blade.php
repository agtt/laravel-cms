@extends('admin.layout')

@section('styles')
    <style>
        .connectedSortable{
            min-height: 50px;
            padding: 5px;
            border:1px dotted #dedede;
        }
    </style>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Menü
            </h1>
        </div>
    </div>

    <div class="row" ng-app="Menus">
        <div ng-controller="MenuController">
            <div class="col-md-3">
                <div class="well">
                    <h4>{{trans('admin.pages')}} :</h4>

                    <ul class="list-unstyled">
                        <li ng-repeat="page in pages">
                            <span class="btn btn-xs btn-success" ng-click="addMenuItem(page.title, page.slug, 'page')">
                                <i class="fa fa-plus-circle"></i>
                            </span>
                            @{{ page.title }}
                        </li>
                    </ul>

                    <hr>

                    <h4>{{trans('admin.defaultmenu')}}  :</h4>
                    <ul class="list-unstyled">
                        <li>
                            <span class="btn btn-xs btn-success" ng-click="addMenuItem('Home', '', 'homepage')">
                                <i class="fa fa-plus-circle"></i>
                            </span>
                            {{trans('admin.home')}} 
                        </li>
                        <li>
                            <span class="btn btn-xs btn-success" ng-click="addMenuItem('Categories', '', 'category')">
                                <i class="fa fa-plus-circle"></i>
                            </span>
                            {{trans('admin.categorylist')}} 
                        </li>
                        <li>
                            <span class="btn btn-xs btn-success" ng-click="addMenuItem('Blog', '', 'blogindex')">
                                <i class="fa fa-plus-circle"></i>
                            </span>
                            {{trans('admin.blogindex')}} 
                        </li>
                        <li>
                            <span class="btn btn-xs btn-success" ng-click="addMenuItem('Portfolio', '', 'portfolio')">
                                <i class="fa fa-plus-circle"></i>
                            </span>
                            {{trans('admin.portfolio')}} 
                        </li>
                        <li>
                            <span class="btn btn-xs btn-success" ng-click="addMenuItem('Login', '', 'login')">
                                <i class="fa fa-plus-circle"></i>
                            </span>
                            {{trans('admin.login')}} 
                        </li>
                        <li>
                            <span class="btn btn-xs btn-success" ng-click="addMenuItem('Register', '', 'register')">
                                <i class="fa fa-plus-circle"></i>
                            </span>
                            {{trans('admin.register')}} 
                        </li>
                        <li>
                            <span class="btn btn-xs btn-success" ng-click="addMenuItem('Search', '', 'searchform')">
                                <i class="fa fa-plus-circle"></i>
                            </span>
                            {{trans('admin.searchform')}} 
                        </li>
                    </ul>

                    <hr>

                    <h4>{{trans('admin.customlink')}}  :</h4>
                    <form ng-submit="addMenuItem(item.name, item.url, 'custom')" class="link">
                        <input ng-model="item.name" type="text" class="form-control" placeholder="{{trans('admin.urlname')}} ">
                        <input ng-model="item.url" type="text" class="form-control" placeholder="{{trans('admin.url')}} " value="/">
                        <input type="submit" class="btn btn-primary" value="{{trans('admin.addnew')}} ">
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <h3>{{trans('admin.yourmenu')}}  :</h3>
                <div class="row">
                    <div class="col-md-5">
                        <h4>{{trans('admin.leftmenu')}} </h4>

                        <ul class="connectedSortable list-group" ui-sortable="sortableOptions" ng-model="menus.left">
                            <li ng-repeat="menu in menus.left" class="ui-state-default list-group-item">
                                <i class="fa fa-arrows" aria-hidden="true"></i>
                                <strong>@{{ menu.name }}</strong> - @{{ menu.url }}
                                <span class="pull-right" ng-click="removeMenuItem(menu)">
                                    <i class="fa fa-trash-o"></i>
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-5">
                        <h4>{{trans('admin.rightmenu')}} </h4>

                        <ul class="connectedSortable list-group" ui-sortable="sortableOptions" ng-model="menus.right">
                            <li ng-repeat="menu in menus.right" class="ui-state-default list-group-item">
                                <i class="fa fa-arrows" aria-hidden="true"></i>
                                <strong>@{{ menu.name }}</strong> - @{{ menu.url }}
                                <span class="pull-right" ng-click="removeMenuItem(menu)">
                                    <i class="fa fa-trash-o"></i>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('scripts')
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="/js/lib/jquery.sortable.js"></script>
    <script>
        var app = angular.module("Menus", ['ui.sortable'])

        app.controller("MenuController", function($scope, $http) {

            $scope.sortableOptions = {
                stop: function(e, ui) {
                    updateMenuOrder();
                },
                connectWith: ".connectedSortable",
            };

            getMenu();

            $http.get('/api/v1/admin/page').success(function(pages) {
                $scope.pages = pages;
            });

            $scope.addMenuItem = function(name, url, type) {
                var item = {
                    name: name,
                    url: url,
                    type: type,
                };
                $http.post('/api/v1/admin/menu', item).success(function() {
                    getMenu();
                });;
            };

            $scope.removeMenuItem = function(menu) {
                $http.post('/api/v1/admin/menu/destroy', menu).success(function() {
                    getMenu();
                });
            };

            function getMenu() {
                $http.get('/api/v1/admin/menu').success(function(menus) {
                    $scope.menus = menus;
                });
            }

            function updateMenuOrder() {
                $http.post('/api/v1/admin/menu/order', $scope.menus).success(function() {
                    getMenu();
                });
            }
        });

    </script>
@stop
