<template>
  <div>
    <div class="uk-cover-container" uk-height-viewport>
      <header class="uk-navbar header">
        <div class="uk-navbar-center">
          <a class="uk-navbar-item uk-logo" :href="$root.url + '/'">
            <img class="logo" :src="$root.url + '/images/logo/logo_umb.jpg'" alt="">
          </a>
        </div>
      </header>
      <div class="uk-width-1-1">
        <div class="uk-position-center">
          <div class="uk-tile uk-tile-default uk-padding-large homepagecontainer">
            <div class="homepage-heading">Kooperasi UMB</div>
            <div class="uk-margin">
              <a class="uk-button uk-button-default uk-display-block btn_viewitem" :href="$root.url + '/#/listitems'">Lihat Data Barang</a>
            </div>
            <div class="uk-margin">
              <a class="uk-button uk-button-default uk-display-block btn_viewitem" :href="$root.url + '/#/add'">Tambah Data Barang</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import navbaritem from './Navbar.vue';

export default {
  components: {
    navbaritem
  }
}
</script>
