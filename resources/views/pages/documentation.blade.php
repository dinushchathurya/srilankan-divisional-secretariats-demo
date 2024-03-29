@extends('layouts.app')

@section('content')

<div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="https:codingtricks.io">Codingtricks</a>
        <span class="breadcrumb-item active">Documentation</span>
    </nav>
</div>

<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <h4 class="tx-gray-800 mg-b-5">Documentation</h4>
    <p class="mg-b-0"></p>
</div>

<div class="br-pagebody">

    <div>
        <h3>Installation via composer</h3>
        <h3><code>composer require dinushchathurya/srilankan-divisional-secretariats</code></h3>
    </div>

    <div style=" margin-top:20px ">
        <h3>Usage</h3>
    <h5>
    <pre style="color:red;">

use Dinushchathurya\Secretariat\Secretariat; //Use this on your controller

public function exampleFunction(){

    return Secretariat::getProvinces(); // Returns all provinces
    return Secretariat::getDistricts('Province'); // Returns districts of province
    return Secretariat::getAuthorities('District'); // Returns district secretariats of a district
}

    </pre>
    </h5>
    </div>

    <div>
        <h3>
            <a href="https://github.com/dinushchathurya/srilankan-divisional-secretariats-demo">Source code for working demo</a>
        </h3>
    </div>

</div>

@endsection
