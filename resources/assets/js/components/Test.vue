<template>
	<div>
<h1>Data User</h1>
  <b-table striped hover :items="items"></b-table>

	</div>
</template>


<script>


export default {
  data () {
    return {
      items: []
    }
  },
  created: function(){
    this.fetch();
  },
  methods: {
    fetch(){
      let uri = "http://localhost:8000/barang";
      this.axios.get(uri).then((response)=>{
        this.items = response.data
      })
    }
  }

}
</script>  


<!-- table-basic-1.vue -->