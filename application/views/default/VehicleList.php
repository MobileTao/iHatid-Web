<?php

$this->load->view($this->config->item('theme') . '/Header');

?>

<div id="wrapper">
	<div id="header">
    </div>
    
    <table cellpadding="0" cellspacing="0">
    	<tbody>
        	<tr>
            	<td class="header"></td>
                <td class="toggle"></td>
            	<td ><?= $this->load->view($this->config->item('theme') . '/Breadcrumb') ?></td>
            </tr>
        	<tr>
            	<td class="left">
                	 <div id="left">
                     	<?php $this->load->view($this->config->item('theme') . '/MenuLeft'); ?>	        
				    </div>
                </td>
                <td width="1" class="toggle" ></td>
                <td style="vertical-align:top" width="100%">
                	<div id="right">
		                <?php $this->load->view($this->config->item('theme') . '/Toolbar'); ?>
                        <div class="content">
                        	<table width="90%" class="dataTable">
                            	<tbody>
                                	<tr class="th">
                                    	<td class="tableDataHeader">ID</td>
                                        <td class="tableDataHeader">Vehicle Type</td>
                                        <td class="tableDataHeader">Plate Number</td>
                                        <td class="tableDataHeader">Model</td>
                                        <td class="tableDataHeader">Assigned Driver</td>
                                    </tr>
                                    <?php for($i=0; $i<30; $i++){ 
										$cssClass = '';
										if($i%2==0)
											$cssClass = 'dataRow';
										else
											$cssClass = ''
									?>
                                    <tr>
                                    	<td class="<?= $cssClass ?>"><?= $i ?></td>
                                        <td class="<?= $cssClass ?>"></td>
                                        <td class="<?= $cssClass ?>"></td>
                                        <td class="<?= $cssClass ?>"></td>
                                        <td class="<?= $cssClass ?>"></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        <div>
                    </div>    
                </td>
            <tr>
        </tbody>
    </table>
</div>
<?php

$this->load->view($this->config->item('theme') . '/Footer');


?>