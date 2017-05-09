<div class="structure<?php e($field->readonly(), ' structure-readonly') ?> builder<?php e($field->readonly(), ' builder-readonly') ?>"
  data-field="builder"
  data-api="<?php __($field->url('sort')) ?>"
  data-sortable="<?php e($field->readonly(), 'false', 'true') ?>"
  data-style="<?php echo $field->style() ?>">

  <div class="builder-label">
    <?php echo $field->headline() ?>
    <?php $backgroundUrl = ( $field->page()->background()->isNotEmpty() ) ? $field->page()->image( $field->page()->background() )->url() : ''; ?>
  </div>

  <div class="builder-add-buttons">
    <?php foreach ($field->fieldsets as $fieldsetName => $fieldset):
      $fieldset = $field->fieldset($fieldsetName);
    ?>
      <a class="btn btn-rounded" data-quickform href="#" data-href="<?= purl($field->page, 'field/' . $field->name . '/customBuilder/add?fieldset=' . $fieldsetName) ?>"><i class="icon icon-left fa fa-plus-circle"></i><?= $fieldset->label ?></a>
    <?php endforeach ?>
  </div>

  <div class="structure-entries builder-entries" style="background-image: url(<?= $backgroundUrl ?>);">

    <?php if(!$field->entries()->count()): ?>
    <div class="structure-empty">
      <?php _l('fields.structure.empty') ?>
    </div>
    <?php else: ?>
    <?php require(__DIR__ . DS . 'styles' . DS . 'items.php') ?>
    <?php endif ?>
  </div>
  <div class="structure-entry builder-entry builder-add-container hidden">
    <div class="builder-entry-quickform-container">

    </div>
  </div>
</div>
