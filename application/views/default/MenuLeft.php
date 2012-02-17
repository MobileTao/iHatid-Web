<ul>
	<li><a class="<?= $this->uri->uri_string() == 'dashboard' ? 'selected' : '' ?>" href="<?= $this->config->base_url() ?>dashboard">Dashboard</a></li>
	<li><a class="<?= $this->uri->uri_string() == 'request' ? 'selected' : '' ?>" href="<?= $this->config->base_url() ?>request">Request</a></li>
    <li><a class="<?= $this->uri->uri_string() == 'vehicle' ? 'selected' : '' ?>" href="<?= $this->config->base_url() ?>vehicle">Vehicle List</a></li>
    <li><a class="<?= $this->uri->uri_string() == 'driver' ? 'selected' : '' ?>" href="<?= $this->config->base_url() ?>driver">Drivers List</a></li>
</ul>

