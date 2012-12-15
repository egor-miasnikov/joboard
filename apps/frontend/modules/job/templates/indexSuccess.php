<h1>Joboard jobs List</h1>

<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Category</th>
      <th>Type</th>
      <th>Company</th>
      <th>Logo</th>
      <th>Url</th>
      <th>Position</th>
      <th>Location</th>
      <th>Description</th>
      <th>How to apply</th>
      <th>Token</th>
      <th>Is public</th>
      <th>Is activated</th>
      <th>Email</th>
      <th>Expires at</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($joboard_jobs as $joboard_job): ?>
    <tr>
      <td><a href="<?php echo url_for('job/show?id='.$joboard_job->getId()) ?>"><?php echo $joboard_job->getId() ?></a></td>
      <td><?php echo $joboard_job->getCategoryId() ?></td>
      <td><?php echo $joboard_job->getType() ?></td>
      <td><?php echo $joboard_job->getCompany() ?></td>
      <td><?php echo $joboard_job->getLogo() ?></td>
      <td><?php echo $joboard_job->getUrl() ?></td>
      <td><?php echo $joboard_job->getPosition() ?></td>
      <td><?php echo $joboard_job->getLocation() ?></td>
      <td><?php echo $joboard_job->getDescription() ?></td>
      <td><?php echo $joboard_job->getHowToApply() ?></td>
      <td><?php echo $joboard_job->getToken() ?></td>
      <td><?php echo $joboard_job->getIsPublic() ?></td>
      <td><?php echo $joboard_job->getIsActivated() ?></td>
      <td><?php echo $joboard_job->getEmail() ?></td>
      <td><?php echo $joboard_job->getExpiresAt() ?></td>
      <td><?php echo $joboard_job->getCreatedAt() ?></td>
      <td><?php echo $joboard_job->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('job/new') ?>">New</a>
