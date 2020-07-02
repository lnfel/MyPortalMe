<!-- Main Content -->
<div class="main-content">
    <section class="section">
        
        <?php $this->load->view('employee/section_header'); ?>
        
        <div class="section-body">

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <?php $this->load->view('employee/menu'); ?>

                </div>

                            
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Online Payroll Information</h4>
                        </div>
                       <div class="col-lg-12">
                                <div class="form-group">
                                    <select class="form-control" name="payrolldate" data-toggle="tooltip" data-placement="top" title="Select Payroll Date">
                                        <option value="">Payroll - January 16-31, 2019</option>
                                        <option value="">Payroll - January 1-15, 2019</option>
                                        <option value="">Payroll - December 16-31, 2018</option>
                                        <option value="">Payroll - December 1-15, 2018</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Payslip</h4>
                        </div>
                        <table class="table table-striped table-bordered table-sm">
                            <thead>
                                <tr>
                                    <th colspan="3" class="bg-secondary">Taxable Income</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>		
                                    <th scope="row" class="w-25">ADD:</th>
                                    <td class="w-25">Basic Salary</td>
                                    <th class="text-right">13,503.04</th>
                                </tr>
                                <tr>		
                                    <th scope="row" class="w-25"></th>
                                    <td class="w-25">Overload</td>
                                    <th class="text-right">0.00</th>
                                </tr>
                                <tr>		
                                    <th scope="row" class="w-25"></th>
                                    <td class="w-25">Overtime</td>
                                    <th class="text-right">8,656.44</th>
                                </tr>
                                <tr>		
                                    <th scope="row" class="w-25"></th>
                                    <td class="w-25">Others</td>
                                    <th class="text-right">0.00</th>
                                </tr>
                                <tr>		
                                    <th scope="row" class="w-25"></th>
                                    <td class="w-25">Adjustment</td>
                                    <th class="text-right">(-887.87)</th>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th colspan="2">Gross Taxable Income</th>
                                    <th class="text-right">21,271.61</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>		
                                    <th scope="row" class="w-25">Less:</th>
                                    <td class="w-25">SSS Contribution</td>
                                    <th class="text-right">(800.00)</th>
                                </tr>
                                <tr>		
                                    <th scope="row" class="w-25"></th>
                                    <td class="w-25">Pagibig Contribution</td>
                                    <th class="text-right">(100.00)</th>
                                </tr>
                                <tr>		
                                    <th scope="row" class="w-25"></th>
                                    <td class="w-25">PhilHealth Contribution</td>
                                    <th class="text-right">(584.97)</th>
                                </tr>
                                <tr>		
                                    <th scope="row" class="w-25"></th>
                                    <td class="w-25">W/H Tax</td>
                                    <th class="text-right">(2,029.91)</th>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th colspan="2">Income After Tax</th>
                                    <th class="text-right">17,756.73</th>
                                </tr>
                                <tr>
                                    <th colspan="2" class="bg-secondary">Non-Taxable Income</th>
                                    <th class="text-right bg-secondary"></th>
                                </tr>
                                <tr>
                                    <th colspan="2" class="bg-secondary">Other Deductions</th>
                                    <th class="text-right bg-secondary"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>		
                                    <th scope="row" class="w-25"></th>
                                    <td class="w-25">INSTITUTIONAL SUMMER OUTING</td>
                                    <th class="text-right">(-887.87)</th>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th colspan="3" class="bg-secondary">Loans Payable</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th colspan="2">Net Income</th>
                                    <th class="text-right">17,260.98</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>



            </div>



            <br /><br /><br /><br /><br />









        </div>









</div>
</section>
</div>


