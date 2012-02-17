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
                            <td align="right">Plate Number:</td>
                            <td align="left"><input type="text" width="100px" /></td>
                        </tr>
                        <tr>
                            <td align="right">Model:</td>
                            <td align="left"><input type="text" width="100px" /></td>
                        </tr>
                        <tr>
                            <td align="right">Type of Vehicle:</td>
                            <td align="left"><input type="text" width="100px" /></td>
                        </tr>
                        <tr>
                            <td align="right">Chassis Number:</td>
                            <td align="left"><input type="text" width="100px" /></td>
                        </tr>
                        <tr>
                            <td align="right">Color:</td>
                            <td align="left"><input type="text" width="100px" /></td>
                        </tr>
                        <tr>
                            <td align="right">Assign Driver:</td>
                            <td align="left">
                                <select>
                                    <option>Steve Jobs</option>
                                    <option>Bill Gates</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Notes:</td>
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