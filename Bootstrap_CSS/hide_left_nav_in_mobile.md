# auto hide left nav in mobile

``` html
<section >
  <trend class="d-none d-md-block m-6 border rounded">
     
  </trend>
  <clucks class="m-3 border rounded">
    
   </clucks>
</section>
````

```css
/* Create two columns/boxes that floats next to each other */
trend {
  float: left;
  width: 25%; 
  padding: 20px;
  height: 100%;
  
}
clucks {
  float: left;
  padding: 20px;
  width: 70%;
   
}
@media (max-width: 600px) {
    trend{
        display: none;
    }
    clucks {
    width: 100%;
    height: auto;    
   }
} 
```