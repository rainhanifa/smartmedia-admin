<!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="fa fa-file-o"></i> TRANSACTION</h1>
                    </div>
                </div>
                <!-- END Page Title -->

               <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="index.html">Home</a>
                            <span class="divider"><i class="fa fa-angle-right"></i></span>
                        </li>
                        <li class="active">Transaction</li>
                    </ul>
                </div>

                <!-- END Breadcrumb -->
                <div class="alert alert-info">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Latest Info! </strong> The page has been added.
                </div>
                <!-- BEGIN Main Content -->
               
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Available Credit Balance:  </strong> You have a credit balance of Rp. 667,00 and this will be automatically applied to any new invoices
                </div>                

                <div class="box">
                            
                    <div>
                        <table class="table table-advance" id="transaction-table">
                            <thead class="table-flag-blue">
                                <tr>
                                    <th>Invoice #</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Invoice Date</th>
                                    <th>Due Date</th>
                                    <th>Total</th>
                                    <th colspan="2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>                               
                                    <td><a href="">279641</a></td>
                                    <td>Handharbeni</td>
                                    <td>Muhammad</td>
                                    <td>16/08/2015</td>
                                    <td>21/08/2015</td>
                                    <td> Rp. 280.983,00</td>
                                    <td><span class="label label-large label-lime">Paid</span></td>

                                    <td><a href="#" class="btn btn-info"><i class="fa fa-tasks"></i> Invoice</a></td>

                                    <td><a href="detail_invoice.html" class="btn btn-info"><i class="fa fa-tasks"></i> View Invoice</a></td>

                                </tr>
                                <tr>                               
                                    <td><a href="">495868</a></td>
                                    <td>Ibnu Shodiqin</td>
                                    <td>Suhaemy</td>
                                    <td>16/03/2017</td>
                                    <td>23/03/2017</td>
                                    <td>Rp. 159.945,00</td>
                                    <td><span class="label label-large label-gray">Canceled</span></td>

                                    <td><a href="#" class="btn btn-info"><i class="fa fa-tasks"></i> Invoice</a></td>

                                    <td><a href="detail_invoice.html" class="btn btn-info"><i class="fa fa-tasks"></i> View Invoice</a></td>

                                </tr>

                                <tr>                               
                                    <td><a href="">503565</a></td>
                                    <td>Andy Zain</td>
                                    <td>Ifkaruddin</td>
                                    <td>12/04/2017</td>
                                    <td>17/04/2017</td>
                                    <td> Rp. 200.565,00</td>

                                    <td><span class="label label-large label-warning">Awaiting Confirmation</span></td>
                                    <td><a href="#" class="btn btn-info"><i class="fa fa-tasks"></i>  Invoice</a> <a data-toggle="modal" data-target="#konfirm" class="btn btn-lime"><i class="fa fa-check"></i> Confirm</a></td>

                                    <td><span class="label label-large label-lime">Paid</span></td>
                                    <td><a href="detail_invoice.html" class="btn btn-info"><i class="fa fa-tasks"></i> View Invoice</a></td>

                                </tr>

                                 <tr>                               
                                    <td><a href="">512348</a></td>
                                    <td>Akhmad</td>
                                    <td>Maulidi</td>
                                    <td>5/05/2017</td>
                                    <td>12/05/2017</td>
                                    <td> Rp. 235.348,00</td>
                                    <td><span class="label label-large label-gray">Canceled</span></td>

                                    <td><a href="#" class="btn btn-info"><i class="fa fa-tasks"></i> Invoice</a></td>

                                    <td><a href="detail_invoice.html" class="btn btn-info"><i class="fa fa-tasks"></i> View Invoice</a></td>

                              
                            </tbody>
                        </table>
                    </div>

                    <p class="text-right">
                        1-12 of 46
                        <a class="btn btn-circle disabled" href="#"><i class="fa fa-angle-left"></i></a>
                        <a class="btn btn-circle" href="#"><i class="fa fa-angle-right"></i></a>
                    </p>
                </div>
                <!-- END Main Content -->

                <!-- Modal -->
                <div class="modal fade modal-white" id="konfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content infotrophy-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3><strong>Confirm Payment #23123</strong></h3>    
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-6">
                                            <h4>ORDER</h4>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Extend 30-days</td>
                                                        <td>..............</td>
                                                        <td class="text-right">Rp 70.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Credit Balance</td>
                                                        <td>..............</td>
                                                        <td class="text-right">-Rp 6.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td class="text-right">TOTAL</td>
                                                        <td class="text-right">Rp 70.000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>PAYMENT DETAIL</h4>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>Date of Payment</td>
                                                    <td> : </td>
                                                    <td>18/05/2017</td>
                                                </tr>
                                                <tr>
                                                    <td>Account Name</td>
                                                    <td> : </td>
                                                    <td>Ibnu Suhaemy</td>
                                                </tr>
                                                <tr>
                                                    <td>Account No. </td>
                                                    <td> : </td>
                                                    <td>12387162212</td>
                                                </tr>
                                                <tr>
                                                    <td>Bank Account</td>
                                                    <td> : </td>
                                                    <td>BRI</td>
                                                </tr>
                                                <tr>
                                                    <td>Additional Information </td>
                                                    <td> : </td>
                                                    <td>Pembayaran invoice 23123</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <br/>
                                        <p><strong>PAYMENT METHOD</strong></p>
                                        <p><strong>BCA 0115116032 - Imaniar Hanifa</strong></p>
                                    </div>
                                </div>              
                            </div>
                          <!-- end modal-body -->
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal">CANCEL</button>
                                <button class="btn btn-primary" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                        <!-- end modal-content -->
                    </div>
                </div>