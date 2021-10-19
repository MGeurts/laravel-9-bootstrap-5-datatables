<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About this project

This application is PHP 8 compatible and build using :
<ul>
    <li><a href="https://laravel.com/" target="_blank">Laravel 8</a></li>
    <li><a href="https://getbootstrap.com/" target="_blank">Bootstrap 5</a></li>
    <li><a href="https://datatables.net/" target="_blank">DataTables</a></li>
</ul>

## Features

<b>Features</b> :
<ul>
    <li><b>Top button bar</b> to quickly navigate to the main parts of your application</li>
    <li><b>Offcanvas menu</b> to access less frequently used parts</li>
    <li><b>Datatables</b>, fully integrated with build in :</li>
    <ul>
        <li>Create - Show - Update - Delete (CRUD) with
            <a href="http://bootboxjs.com/" target="_blank">Bootbox.js</a> dialogs and
            <a href="https://codeseven.github.io/toastr/" target="_blank">Toastr</a> notifications
        </li>
        <li>Copy to clipboard</li>
        <li>Export to PDF and Excel</li>
        <li>Print function</li>
        <li>Items per page selector</li>
        <li>Column visibility selector</li>
        <li>Search with result highlighting</li>
        <li>Server-side pagination and filtering</li>
        <li>Multiple row selection (for mass deletes)</li>
        <li>Inline boolean field toggable</li>
        <li>Help</li>
    </ul>
</ul>

## Special feature

The top menu contains in its center a dropdown selector for the year. This is implemented as a global session variable [APP].[YEAR] and allows you to easely filter datatable datasets (when needed) to reflect the data concerning the selected year. This is extreem helpfull if you manage models that depend on the year, like for instance deliveries, orders, productions, and so on...

## Models implemented

In this demo project, 2 models are already implemented :
<b>Customers</b>, available to all logged in users
<b>Users</b>, only available to logged in users with the property Developer
You can use their controller and the corresponding views as a base to create new datatables utilising your own project models.

## Credentials

Name : <b>admin@admin.com</b>
Password <b>password</b>

## License

This demo Larevel project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
