@extends('layout.admin.template')
@section('title','bet322/admin/hiddenMatch')
@section('content')
<section id="main-content">
            <section class="wrapper">
            <ul class="nav nav-tabs">
    <li class="active"><a href="#">History</a></li>
    <li><a href="#">Ongoing bets</a></li>
    <li><a href="#">Finishing bets</a></li>
  </ul>
                <h3><i class="fa fa-angle-right"></i> Ongoing bets </h3>
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i>List</h4>
                            
                            <table class="table table-hover table-striped table-advanced table-bordered"
                                   <thead>
                                    <tr>
                                        <th class="col-lg-0.5" class="numeric">Order id </th>
                                        <th class="col-lg-1.5" class="numeric">Home team</th>
                                        <th class="col-lg-1.5" class="numeric">Away team</th>
                                        <th class="col-lg-1.5" class="numeric">Betting time</th>
                                        <th class="col-lg-1" class="pull-left">Place bet</th>
                                        <th class="col-lg-0.5" class="pull-left">Quantity</th>
                                        <th class="col-lg-2" class="pull-left"></th>
                                    </tr>

                                </thead>
                                <tbody>
                                   <tr>
                                        <td class="col-lg-0.5" class="numeric">1 </td>
                                        <td class="col-lg-1.5" class="numeric">manchester</td>
                                        <td class="col-lg-1.5" class="numeric">real</td>
                                        <td class="col-lg-1.5" class="numeric">9:30:20 12.2.2</td>
                                        <td class="col-lg-1.5" class="numeric">home</td>
                                        <td class="col-lg-1.5" class="pull-center">400<br></td>

                                         <td>
                                        <button class="btn btn-primary btn-xs">detail<i class="fa fa-pencil"></i></button>
                                        
                                        <button class="btn btn-danger btn-xs">delete<i class="fa fa-trash-o "></i></button>
                                        <button class="btn btn-success btn-xs">&nbsp &nbsp update score &nbsp &nbsp<i class="fa fa-user"></i></button>
                                  </td>
                                    </tr>

                                </tbody>
                            </table>


                            
                        </div><!-- /content-panel -->
                    </div><!-- /col-lg-4 -->			
                </div><!-- /row -->



            </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->
@endsection