<?= $this->extend('user') ?>
<?= $this->section('content') ?>

<section class="page-container" data-page="article">
	<header class="page-header flex-container flex-vertical-center" style="background-size: 100%;width: 100%;background-image: url(<?= $newsData->image ?>); background-color: #8f8c8c;">
		<div class="page-header-content">
		<h1><?= $newsData->title ?></h1> <?= $newsData->shortstory ?> </div>
	</header>
	<div class="page-content">
		<div class="left-side">
			<article class="default-section">
				<div class="aside-title-content"><?= $newsData->title ?></div>
				<div class="aside-desc-content"><?= $newsData->shortstory ?></div>
				<div class="aside-content">
					<?= $newsData->longstory ?>
					<div class="article-author flex-container flex-vertical-center">
						<div class="author-image"> <img src="https://habbo.com.br/habbo-imaging/avatarimage?figure=&amp;direction=2&amp;head_direction=3&amp;gesture=sml&amp;size=b&amp;headonly=1" alt="<?= $newsData->author ?>"> </div>
						<div class="author-details">
							<div class="author-name"><a href="/profile/<?= $newsData->author ?>" class="related-article-container"><?= $newsData->author ?></a></div>
						</div>
					</div>
				</div>
			</article>
		</div>
		<div class="right-side">
			<aside class="default-section">
				<div class="aside-title-content">Last News</div>
				<div class="aside-content">
					<div class="related-articles-container">
						<a href="" class="related-article-container">
							<div class="related-article-thumbnail" style="background-image: url(soon);"></div>
							<div class="related-article-details">
								<div class="related-article-title">Soon </div>
								<div class="related-article-date">date</div>
							</div>
						</a>
					</div>
				</div>
			</aside>
		</div>
	</div>
</section>

<?= $this->endSection() ?>
