<template lang="html">
  <div>
    <header class="uk-navbar header">
      <div class="uk-navbar-left">
        <a class="uk-navbar-item" onclick="self.history.back()" uk-icon="ratio: 1.5; icon: arrow-left"></a>
      </div>
      <div class="uk-navbar-center">
        <a class="uk-navbar-item uk-logo" :href="$root.url + '/'">
          <img class="logo" :src="$root.url + '/images/logo/logo_umb.jpg'" alt="">
        </a>
      </div>
    </header>
  </div>
</template>
