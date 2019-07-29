<!-- App\ShowClasses\ShowMainContent.php -->

<section class="main-content" <?php if (!$data['login']) echo "style='display: none'" ?>>
  <div class="section__header">
    <div class="section__headline content__button_grey-theme"><?= $data['login'] ?></div>
    <div class="main-content__header-button content__button_grey-theme">редактировать</div>
  </div>
  <div class="main-content__user-info-container">
    <div class="main-content__avatar-container" style="background-image: url('<?= $data['avatar'] ?>')"></div>
    <div class="main-content__user-info">
      <div class="main-content__certain-user-info-container">
        <div class="main-content__type-of-user-info">зарегистрирован</div>
        <div class="main-content__certain-user-info"><?= $data['registration_data'] ?></div>
      </div>
      <div class="main-content__certain-user-info-container">
        <div class="main-content__type-of-user-info">сообщений</div>
        <div class="main-content__certain-user-info"><?= $data['count_of_messages'] ?></div>
      </div>
    </div>
  </div>
</section>

<section class="main-content" <?php if ($data['login']) echo "style='display: none'" ?>>
  <div class="section__header">
    <div class="section__headline content__button_grey-theme">Пользователь не найден</div>
    <a onclick="javascript:history.back(); return false;" class="main-content__header-button content__button_grey-theme">назад</a>
  </div>
</section>