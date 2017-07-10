<div id="scripto" class="scripto scripto-transcription side-view">

<?php echo $this->get_navigation(); ?>

<script type="text/javascript" src="<?php echo site_url(); ?>/js/ckeditor/ckeditor.js"></script>

<div class="transcription-wrapper">

	<div class="transcription-header">
		<h3>Transcribe <cite><?php echo $doc->getPageName(); ?></cite></h3>
		<h4>in <a href="<?php echo get_permalink($doc->getId()); ?>"><cite><?php echo $doc->getTitle(); ?></cite></a></h4>

		<div class="view-buttons u-pull-right">
			<button style="display: none" data-action="side-view" class="icon-horizontal">
				Horizontal
			</button>
			<button style="display: none" data-action="vertical-view" class="icon-vertical">
				Vertical
			</button>
			<button data-action="fullscreen" class="icon-fullscreen">
				Fullscreen
			</button>
		</div>

		<div class="u-cf"></div>
	</div>

	<div class="transcription-container">
		<div class="image-wrapper">
			<?php echo $this->get_media_viewer( $_GET['scripto_doc_page_id'] ); ?>
		</div>

		<div class="text-input-wrapper">
			<?php if ( $doc->canEditTranscriptionPage() ): ?>
				<form action="" method="post">
					<textarea name="scripto_transcripton" cols="45" rows="12"><?php echo $doc->getTranscriptionPageWikitext(); ?></textarea>
					<div class="transcription-tools">
						<br/>
						<input type="submit" name="scripto_submit_transcription" value="Save transcription" class="button button-primary" />
					</div>
				</form>
			<?php else: ?>
				<p>You don't have permission to transcribe this page.</p>
			<?php endif; ?>
		</div>

		<div class="u-cf"></div>
	</div>
</div>

<p><a href="<?php echo $url_talk; ?>">discuss page</a> | <a href="<?php echo $url_transcription_history; ?>">view history</a> | <a href="<?php echo $url_document; ?>">view document</a></p>

<h2>Current Transcription</h2>

<div class="transcription-tools">
	<?php if ( $this->_scripto->canExport() ): ?>
	<form action="" method="post">
	<input type="submit" name="scripto_submit_import_page" value="Import this page" />
	</form>
	<?php endif; ?>

	<?php if ( $this->_scripto->canProtect() ): ?>
	<?php if ( $doc->isProtectedTranscriptionPage() ): ?>
	<form action="" method="post">
	<input type="submit" name="scripto_submit_unprotect_page" value="Unprotect this page" />
	</form>
	<?php else: ?>
	<form action="" method="post">
	<input type="submit" name="scripto_submit_protect_page" value="Protect this page" />
	</form>
	<?php endif; ?>
	<?php endif; ?>
</div>

<div class="transcription-display"><?php echo html_entity_decode($doc->getTranscriptionPageHtml()); ?></div>

</div>



