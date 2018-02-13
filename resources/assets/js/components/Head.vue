
<style>
	body{
		background: #eee;
	}
	.card{
		margin-top: 1%;
	}
</style>

<template>
<div>
    <b-navbar toggleable="md" type="dark" variant="info">

  <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

  <b-navbar-brand to="/">InventarisApp</b-navbar-brand>

  <b-collapse is-nav id="nav_collapse">

    <b-navbar-nav>
      <b-nav-item :to="{name: 'Barang'}">Barang</b-nav-item>
      <b-nav-item :to="{name: 'User'}">User</b-nav-item>

    </b-navbar-nav>

    <!-- Right aligned nav items -->
    <b-navbar-nav class="ml-auto">

      <b-nav-form>
        <b-form-input size="sm" class="mr-sm-2" type="text" placeholder="Search"/>
        <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
      </b-nav-form>



    </b-navbar-nav>

  </b-collapse>
</b-navbar>

<!-- navbar-1.vue -->

<div class="container">
<b-card >

	<router-view>

</router-view>
</b-card>
</div>


  <b-modal id="myModal" title="Konfirmasi"  ref="confirmModal"     @ok="forceRemove(barang.kode_barang)" >
	Yakin Menghapus Data ini?
  </b-modal>


</div>
</template>

