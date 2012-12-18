<div id="jobs">
    <table class="table">
        <?php foreach ($joboard_jobs as $i => $job): ?>
        <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
            <td><?php echo $job->getLocation() ?></td>
            <td><a href="<?php echo url_for('job/show?id='.$job->getId()) ?>"><?php echo $job->getPosition() ?></a></td>
            <td><?php echo $job->getCompany() ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>