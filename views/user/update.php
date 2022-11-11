<?php $this->setLayoutVar('title', 'プロフィールの更新') ?>
<?php $this->setLayoutVar('errors', $errors) ?>

<section class="form-container">
  <?php if (isset($errors) && count($errors) > 0) : ?>
    <?php echo $this->render('errors', array('errors' => $errors)); ?>
  <?php endif; ?>
  <section class="form-container">
    <form action="<?php echo $base_url; ?>/user/update" method="POST" autocomplete="off">
      <h3>プロフィールの更新</h3>
      <input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>" />
      <input type="text" name="name" maxlength="50" class="box" oninput="this.value = this.value.replace(/\s/g, '')" placeholder="<?php echo $user['name']; ?>">
      <input type="email" name="email" maxlength="50" class="box" oninput="this.value = this.value.replace(/\s/g, '')" placeholder="<?php echo $user['email']; ?>">
      <input type="password" name="old_password" maxlength="50" placeholder="現在のパスワードを入力してください。" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="new_password" maxlength="50" placeholder="新しいパスワードを入力してください。" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="confirm_password" maxlength="50" placeholder="確認用に新しいパスワードを入力してください。" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="更新" name="submit" class="btn">
    </form>
  </section>
</section>