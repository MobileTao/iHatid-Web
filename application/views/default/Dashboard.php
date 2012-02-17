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