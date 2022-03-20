<fa icon="archive" />

 https://github.com/FortAwesome/Font-Awesome/tree/master/js-packages/%40fortawesome/free-solid-svg-icons
 https://www.w3schools.com/icons/fontawesome_icons_webapp.asp

# package.json

 "@fortawesome/fontawesome-svg-core": "^6.1.0",
    "@fortawesome/free-regular-svg-icons": "^6.1.0",
    "@fortawesome/free-solid-svg-icons": "^6.1.0",
    "@fortawesome/vue-fontawesome": "^3.0.0-5",


 # main.js
 import { FontAwesomeIcon } from './plugins/font-awesome'

 # plugins/font-awesome.json

 # Upvote.vue

 <template>   
  <button  @click="count++"><fa class="arrow-up" icon="arrow-up" /></button> 
</template>

<script>
export default {
  name: 'Upvote',
  props: {
  },
  data() {
    return {
      count: 0
    }
  }
}
</script>
<style scoped>
.arrow-up{
  width: 30px;
  margin-left: 15px;
  margin-right: 15px;
}

button {
    padding: 0.75rem;
    border-radius: 8px;
    border: none;
    background-color:#F4F6F8;
    font-size: 3em;
}
</style>