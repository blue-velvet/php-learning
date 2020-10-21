<html>
	<title>Title</title>
	<head></head>
	<body>
		<?php $task_deadline_ts = 1604102400; ?>
		<?php $date_deadline = date("d.m.Y", $task_deadline_ts); ?>
		<?php $days_until_deadline = floor(($task_deadline_ts - time())/86400); ?>
	
		<?php $show_complete_tasks = 1 ?>

		<?php if ($show_complete_tasks == 1): ?>
		<input id="show-complete-tasks">
		<?php endif; ?>

		<table class="tasks">
		<?php if ($show_complete_tasks == 1): ?>
		<tr class="tasks__item task task--completed">
			<td class="task__select">
				<label class="checkbox task__checkbox">
					<input class="checkbox__input visually-hidden" type="checkbox" checked>
					<span class="checkbox__text">Записаться на интенсив "Базовый PHP"</span>
				</label>
			</td>
			<td class="task__date"><? print($date_deadline) ?></td>
			<td class="task__controls">
			</td>
		</tr>
		<tr>
			<td>Days until deadline: </td>
			<td><?php print($days_until_deadline); ?></td>
		</tr>
		<?php endif; ?>
	</body>
</html>