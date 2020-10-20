<html>
	<title>Title</title>
	<head></head>
	<body>
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
			<td class="task__date">10.04.2017</td>

			<td class="task__controls">
			</td>
		</tr>
		<?php endif; ?>
	</body>
</html>