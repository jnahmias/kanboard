<!-- swimlane -->
<tr id="swimlane-<?= $swimlane['id'] ?>">
   <th class="board-swimlane-header" colspan="<?= $swimlane['nb_columns'] ?>">
        <?php if (! $not_editable): ?>
            <a href="#" class="board-swimlane-toggle" data-swimlane-id="<?= $swimlane['id'] ?>">
                <i class="fa fa-chevron-circle-up hide-icon-swimlane-<?= $swimlane['id'] ?>" title="<?= t('Collapse swimlane') ?>" role="button" aria-label="<?= t('Collapse swimlane') ?>"></i>
                <i class="fa fa-chevron-circle-down show-icon-swimlane-<?= $swimlane['id'] ?>" title="<?= t('Expand swimlane') ?>" role="button" aria-label="<?= t('Expand swimlane') ?>" style="display: none"></i>
            </a>
        <?php endif ?>

        <?= $this->text->e($swimlane['name']) ?>

        <?php if (! $not_editable && ! empty($swimlane['description'])): ?>
            <?= $this->app->tooltipLink('<i class="fa fa-info-circle"></i>', $this->url->href('BoardTooltipController', 'swimlane', array('swimlane_id' => $swimlane['id'], 'project_id' => $project['id']))) ?>
        <?php endif ?>

        <span title="<?= t('Number of tasks in this swimlane') ?>" class="board-column-header-task-count swimlane-task-count-<?= $swimlane['id'] ?>">
            <?php if ($swimlane['task_limit']): ?>
                (<span><span class="ui-helper-hidden-accessible"><?= t('Number of tasks in this swimlane') ?> </span><?= $swimlane['nb_tasks'] ?>/<?= $swimlane['task_limit'] ?>)
            <?php else: ?>
                (<span><span class="ui-helper-hidden-accessible"><?= t('Number of tasks in this swimlane') ?> </span><?= $swimlane['nb_tasks'] ?>)
            <?php endif ?>
        </span>
    </th>
</tr>
