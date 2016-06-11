<?php $this->load->view('header-template');?>

<!-- Page container -->
 	<div class="page-container">
	<?php $this->load->view('sidebar-template-personal');?>
	<div class="page-content">
			<div class="page-header">
				<div class="page-title">
					<h3>Penugasan</h3>
				</div>
			</div>
		<!-- /sidebar -->

   <form id="ff" method="post" action="<?php echo base_url('penugasan/penugasan_detail_pro_add')?>">

        <input type="hidden" name="personnel_id" value="<?php echo $personnel_id; ?>" >

        <fieldset>
            <legend> Key Data </legend>
            <table>
                <tr>    
                    <td> Periode </td>
                    <td> 
                        <input class="easyui-datebox"   type="text" name="start_date" value="<?php echo date('d-m-Y');?>" ></input> 
                    </td>
                    <td> 
                        <input class="easyui-datebox"   type="text" name="end_date"  value="<?php echo $date_end;?>" ></input> 
                    </td>
                    <td> Status </td>
                    <td> 
                        <select class="easyui-combobox" name="status_process">
                            <option value="">--Pilih--</option>
                            <option value="1">Release</option>
                            <option value="0">Plan</option>
                        </select>
                    </td>
                </tr>
                <tr>    
                    <td> Tipe Penugasan Sementara </td>
                    <td colspan="2"> 
                        <select name="assignment_type" class="easyui-combobox">
                            <option value="">--Pilih--</option>
                            <?php 
                            foreach($opt_assignment_type->result() as $row){  echo "<option value=".$row->assignment_type."> ".$row->name."</option>" ;      
                            }
                            ?> 
                        </select>

                     
                    </td>
                    <td>  Alasan </td>
                   
                    <td> 
                    <select name="assignment_reason" class="easyui-combobox">
                        <option value="">--Pilih--</option>
                        <?php
                        foreach ($opt_assignment_reason->result() as $rows) {
                            echo "<option value=".$rows->assignment_reason."> ".$rows->name."</option>" ;    
                            }
                        ?>
                    </select>

                        
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend> Struktur Administrasi </legend>
            <table>
                <tr>    
                    <td> Tipe Karyawan </td>
                    <td colspan="2"> 
                        
                         <select name="employee_type" class="easyui-combobox">
                                            <option value="">--Pilih--</option>
                                            <?php
                                            foreach ($opt_employee_type->result() as $rowemployeetype) {

                                                echo "<option value=".$rowemployeetype->employee_type."> ".$rowemployeetype->name."</option>" ;
                                                 
                                            }
                                            ?>
                                                
                                            </select>
                    </td>
                    <td> Sub Tipe </td>
                    <td colspan="2"> 
                      
                        <select name="employee_subtype" class="easyui-combobox">
                                            <option value="">--Pilih--</option>
                                            <?php
                                            foreach ($opt_employee_subtype->result() as $rowemployeestype) {

                                                echo "<option value=".$rowemployeestype->employee_subtype."> ".$rowemployeestype->name."</option>" ;
                                                 
                                            }
                                            ?>
                                                
                                            </select>

                    </td>                   
                </tr>
                <tr>    
                    <td> Area </td>
                    <td colspan="2"> 
                       <select name="employee_area" class="easyui-combobox">
                                            <option value="">--Pilih--</option>
                                            <?php
                                            foreach ($opt_employee_area->result() as $rowemployeearea) {

                                                echo "<option value=".$rowemployeearea->employee_area."> ".$rowemployeearea->name."</option>" ;
                                                 
                                            }
                                            ?>
                                                
                                            </select>
                    </td>
                    <td> Cabang </td>
                    <td colspan="2"> 
                     <select name="employee_office" class="easyui-combobox">
                                            <option value="">--Pilih--</option>
                                            <?php
                                            foreach ($opt_employee_cabang->result() as $rowemployeecabang) {

                                                echo "<option value=".$rowemployeecabang->employee_office."> ".$rowemployeecabang->name."</option>" ;
                                                 
                                            }
                                            ?>
                                                
                                            </select>
                    </td>                   
                </tr>
                
            </table>
        </fieldset>
        <fieldset>
            <legend> Struktur Organisasi </legend>
            <table>
                <tr>    
                    <td> Posisi </td>
                    <td colspan="2"> 
                        
                        <select name="position" class="easyui-combobox">
                                            <option value="">--Pilih--</option>
                                            <?php
                                            foreach ($opt_position->result() as $rowposition) {

                                                echo "<option value=".$rowposition->object_id."> ".$rowposition->name."</option>" ;
                                                 
                                            }
                                            ?>
                                                
                                            </select>
                                            </input> 
                    </td>
                    <td> Organisasi </td>
                    <td colspan="2"> 
                        <input class="easyui-textbox"   type="text" name="organization"></input> 
                    </td>                   
                </tr>
                <tr>    
                    <td> Jabatan </td>
                    <td colspan="2"> 
                        <input class="easyui-textbox" type="text" name="jabatan" ></input> 
                    </td>
                    <td> Unit Kerja </td>
                    <td colspan="2"> 
                        <input class="easyui-textbox" type="text" name="unit"  ></input> 
                    </td>                   
                </tr>
                <tr>    
                    <td> Perusahaan </td>
                    <td colspan="2"> 
                        <input class="easyui-textbox" type="text" name="company"></input> 
                    </td>
                    <td> Bagian </td>
                    <td colspan="2"> 
                        <input class="easyui-textbox"   type="text" name="bagian"  ></input> 
                    </td>                   
                </tr>
                <tr>    
                    <td> Cost Center </td>
                    <td colspan="2"> 
                        <input class="easyui-textbox"   type="text" name="cost_center" ></input> 
                    </td>
                    <td> Wilayah </td>
                    <td colspan="2"> 
                    <select name="work_location" class="easyui-combobox">
                        <option value="">--Pilih--</option>
                        <?php
                        foreach ($opt_employee_wilayah->result() as $rowemployeewilayah) {
                            echo "<option value=".$rowemployeewilayah->work_location."> ".$rowemployeewilayah->name."</option>" ;

                            }
                        ?>
                    </select>

                    </td>                   
                </tr>
                
            </table>
        </fieldset>
         <fieldset>
            <legend> Info Lainnya </legend>
            <table>
                <tr>    
                    <td> No SK  </td>
                    <td colspan="4"> 
                        <input class="easyui-textbox"   type="text" name="legal_letter_no"></input> 
                    </td>
                                 
                </tr>
                <tr>    
                    <td> Tanggal SK </td>
                    <td colspan="2"> 
                        <input class="easyui-datebox"   type="text" name="legal_date"></input> 
                    </td>
                    <td> Tanggal Berlaku </td>
                    <td colspan="2"> 
                        <input class="easyui-datebox"   type="text" name="legal_effective_date"></input> 
                    </td>                   
                </tr>
                <tr>    
                    <td> NIK  </td>
                    <td colspan="4"> 
                        <input class="easyui-textbox"   type="text" name="nik" value="<?php echo $personnel_id;?>" ></input> 
                    </td>
                          
                </tr>
                <tr>    
                    <td> Catatan  </td>
                    <td colspan="4"> 
                        <input class="easyui-textbox"   type="text" name="remark" ></input> 
                    </td>
                          
                </tr>
                
            </table>
        </fieldset>
             <div style="text-align:center;padding:5px">
          <button class="easyui-linkbutton" data-options="iconCls:'icon-save'"> Simpan</button>
        </div>
            
        </form>
      
        
	 
</div>
 </div>




