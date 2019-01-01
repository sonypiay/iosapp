<template>
  <div>
    <div class="uk-cover-container" uk-height-viewport>
      <navbaritem></navbaritem>
      <div class="uk-position-center">
        <div class="uk-tile uk-tile-default uk-padding-large homepagecontainer">
          <div class="homepage-heading">Kooperasi UMB</div>
          <div class="uk-margin-top">
            <a class="uk-button uk-button-default btn_viewitem" :href="$root.url + '/#/listitems'">Lihat Data Barang</a>
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
