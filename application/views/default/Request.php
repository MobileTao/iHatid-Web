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
                        	<div class="content">
                        	<table width="90%" class="dataTable">
                            	<tbody>
                                	<tr class="th">
                                    	<td class="tableDataHeader">ID</td>
                                        <td class="tableDataHeader">Requestor Name</td>
                                        <td class="tableDataHeader">Destination</td>
                                        <td class="tableDataHeader">Landmark</td>
                                        <td class="tableDataHeader">City</td>
                                        <td class="tableDataHeader">Current Location</td>
                                        <td class="tableDataHeader">Time of Pickup</td>
                                        <td class="tableDataHeader">Status</td>
                                    </tr>
                                    <?php for($i=0; $i<30; $i++){ 
										$cssClass = '';
										if($i%2==0)
											$cssClass = 'dataRow';
										else
											$cssClass = ''
									?>
                                    <tr>
                                    	<td class="<?= $cssClass ?>"><a href="request/details"><?= $i ?></a></td>
                                        <td class="<?= $cssClass ?>"></td>
                                        <td class="<?= $cssClass ?>"></td>
                                        <td class="<?= $cssClass ?>"></td>
                                        <td class="<?= $cssClass ?>"></td>
                                        <td class="<?= $cssClass ?>"></td>
                                        <td class="<?= $cssClass ?>"></td>
                                        <td class="<?= $cssClass ?>"></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        <div>
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