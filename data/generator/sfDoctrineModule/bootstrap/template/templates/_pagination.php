<div class="pagination pagination-centered">
	<ul>
		[?php if($pager->getPage() != 1):?]<li><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=1" title="[?= __('First page')?]">&laquo;</a></li>[?php endif;?]
		[?php if($pager->getPage() != 1):?]<li><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getPreviousPage() ?]" title="[?= __('Previous page')?]">&lsaquo;</a></li>[?php endif;?]
			
	[?php foreach ($pager->getLinks() as $page): ?]
    [?php if ($page == $pager->getPage()): ?]
      <li class="active"><span>[?php echo $page ?]</span></li>
    [?php else: ?]
      <li><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $page ?]">[?php echo $page ?]</a></li>
    [?php endif; ?]
  [?php endforeach; ?]
			
		[?php if($pager->getPage() != $pager->getLastPage()):?]<li><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getNextPage() ?]" title="[?= __('Next page')?] ">&rsaquo;</a></li>[?php endif;?]
		[?php if($pager->getPage() != $pager->getLastPage()):?]<li><a href="[?php echo url_for('@<?php echo $this->getUrlForAction('list') ?>') ?]?page=[?php echo $pager->getLastPage() ?]" title="[?= __('Last page')?]">&raquo;</a></li>[?php endif;?]
			
	</ul>
</div>
