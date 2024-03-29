<table class="table-striped">
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $joboard_job->getId() ?></td>
    </tr>
    <tr>
      <th>Category:</th>
      <td><?php echo $joboard_job->getCategoryId() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $joboard_job->getType() ?></td>
    </tr>
    <tr>
      <th>Company:</th>
      <td><?php echo $joboard_job->getCompany() ?></td>
    </tr>
    <tr>
      <th>Logo:</th>
      <td><?php echo $joboard_job->getLogo() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $joboard_job->getUrl() ?></td>
    </tr>
    <tr>
      <th>Position:</th>
      <td><?php echo $joboard_job->getPosition() ?></td>
    </tr>
    <tr>
      <th>Location:</th>
      <td><?php echo $joboard_job->getLocation() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $joboard_job->getDescription() ?></td>
    </tr>
    <tr>
      <th>How to apply:</th>
      <td><?php echo $joboard_job->getHowToApply() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $joboard_job->getToken() ?></td>
    </tr>
    <tr>
      <th>Is public:</th>
      <td><?php echo $joboard_job->getIsPublic() ?></td>
    </tr>
    <tr>
      <th>Is activated:</th>
      <td><?php echo $joboard_job->getIsActivated() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $joboard_job->getEmail() ?></td>
    </tr>
    <tr>
      <th>Expires at:</th>
      <td><?php echo $joboard_job->getExpiresAt() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $joboard_job->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $joboard_job->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('job/edit?id='.$joboard_job->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('job/index') ?>">List</a>
