<template>
   <h1>Jobs</h1>
   <div class="job" v-for="job in jobs" :key="job.id">
      <h1>{{job.title }}</h1>
   </div>
</template>

<script>
export default {
  data(){
    return{
      jobs:[
        {id:"1", title:"project manager", detail:"project manager"},
        {id:"2", title:"designer", detail:"project deisnger"},
        {id:"3", title:"developer", detail:"project developer"},

      ]
    }
  }

}
</script>

<style>
       .job{
        color:crimson;
       }
</style>
