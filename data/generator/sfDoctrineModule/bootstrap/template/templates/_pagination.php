<div class="sf_admin_pagination" style="float: right;">
	<ul class="pagination">
		[?php if($pager->getPage() != 1):?]<li style="clear: none;"><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=1" title="[?= __('First page')?]">&laquo;</a></li>[?php endif;?]
		[?php if($pager->getPage() != 1):?]<li style="clear: none;"><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getPreviousPage() ?]" title="[?= __('Previous page')?]">&lsaquo;</a></li>[?php endif;?]
			
	[?php foreach ($pager->getLinks() as $page): ?]
    [?php if ($page == $pager->getPage()): ?]
      <li class="active" style="clear: none;">[?php echo $page ?]</a>
    [?php else: ?]
      <li style="clear: none;"><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $page ?]">[?php echo $page ?]</a></li>
    [?php endif; ?]
  [?php endforeach; ?]
			
		[?php if($pager->getPage() != $pager->getLastPage()):?]<li style="clear: none;"><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getNextPage() ?]" title="[?= __('Next page')?] ">&rsaquo;</a></li>[?php endif;?]
		[?php if($pager->getPage() != $pager->getLastPage()):?]<li style="clear: none;"><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getLastPage() ?]" title="[?= __('Last page')?]">&raquo;</a></li>[?php endif;?]
			
	</ul>
</div>
