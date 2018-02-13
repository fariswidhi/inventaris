<template>
  <div>
    
  <h1>Edit User</h1>
  <form v-on:submit.prevent="update(user.id)" class="form-horizontal" >

                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Nama</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" required="" placeholder="Bana" v-model="user.name"/>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Email</label>
                        <div class="col-md-12">
                          <input type="text" class="form-control" required="" placeholder="Nama Barang" v-model="user.email"/>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Password</label>
                        <div class="col-md-12">
                          <input type="password" class="form-control"  placeholder="Password" v-model="user.password"/>

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-md-12 control-label" >Level</label>
                        <div class="col-md-12">
                          <select class="form-control" v-model="user.level">
                              <option value="1">Admin</option>
                              <option value="2">Petugas</option>
                          </select>

                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-4 col-md-offset-2">
                          <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                      </div>
                    </form>

  </div>
</template>

<script>

  export default{
    data(){
      return {
        user:{}
      }
    },
    created(){
      var id = this.$route.params.id;
      let uri  = 'http://localhost:8000/users/'+id+"/edit";
      this.axios.get(uri).then((response)=>{
        this.user = response.data;
      });
    },
    methods:{
      update(id){
        let uri = 'http://localhost:8000/users/'+id;
        var user = this.user;
        this.axios.patch(uri,user).then((response)=>{
          this.$router.push({'name':'User'});

        })
      }
    }
  }  
</script>