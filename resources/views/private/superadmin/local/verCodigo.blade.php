@extends('layouts.superadmin')
@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">

    <li class="nav-item">

       <a class="nav-link" id="tab-javascript" data-toggle="tab"

          href="#content-javascript"

          role="tab" aria-controls="content-javascript" aria-selected="false">

       Javascript

       </a>

    </li>

    <li class="nav-item">

       <a class="nav-link" id="tab-css" data-toggle="tab"

          href="#content-css"

          role="tab" aria-controls="content-css" aria-selected="false">

       CSS

       </a>

    </li>

    <li class="nav-item">

       <a class="nav-link active" id="tab-bootstrap" data-toggle="tab"

          href="#content-bootstrap"

          role="tab" aria-controls="content-bootstrap" aria-selected="true">

       Bootstrap

       </a>

    </li>

 </ul>



 <div class="tab-content" id="myTabContent">

    <div class="tab-pane fade" id="content-javascript"

       role="tabpanel" aria-labelledby="tab-javascript">

       JavaScript is a cross-platform, object-oriented scripting language ...

    </div>

    <div class="tab-pane fade" id="content-css"

       role="tabpanel" aria-labelledby="tab-css">

       CSS stands for Cascading Style Sheets. ...

    </div>

    <div class="tab-pane fade show active" id="content-bootstrap"

       role="tabpanel" aria-labelledby="tab-bootstrap">

       Bootstrap is a free front-end framework for faster and easier web development...

    </div>

 </div>
@endsection
