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
                <td style="vertical-align:top" align="left" width="100%">
                    <div id="right">
                    <?php $this->load->view($this->config->item('theme') . '/Toolbar'); ?>
                    <div class="content">
                    <table>
                        <tr>
                            <td align="right">Request ID:</td>
                            <td align="left"><input type="text" width="100px" /></td>
                        </tr>
                        <tr>
                            <td align="right">Requestor:</td>
                            <td align="left"><input type="text" width="100px" /></td>
                        </tr>
                        <tr>
                            <td align="right">Destination:</td>
                            <td align="left"><input type="text" width="100px" /></td>
                        </tr>
                        <tr>
                            <td align="right">Landmark/Establishment:</td>
                            <td align="left"><input type="text" width="100px" /></td>
                        </tr>
                        <tr>
                            <td align="right">Street:</td>
                            <td align="left"><input type="text" width="100px" /></td>
                        </tr>
                        <tr>
                            <td align="right">City:</td>
                            <td align="left"><input type="text" width="100px" /></td>
                        </tr>
                        <tr>
                            <td align="right">Driver:</td>
                            <td align="left"><input type="text" width="100px" /></td>
                        </tr>
                        <tr>
                            <td align="right">Taxi Plate Number:</td>
                            <td align="left"><input type="text" width="100px" /></td>
                        </tr>
                        <tr>
                            <td align="right">Status:</td>
                            <td align="left"><input type="text" width="100px" /></td>
                        </tr>
                    </table>
                    </div>
                    </div>
                </td>
            <tr>
        </tbody>
    </table>
    
<?php
	$this->load->view($this->config->item('theme') . '/Footer');
?>