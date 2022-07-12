import {Helper} from "./Helper.js";
class App
{
    static ClassN="";
    static AddRemoveClass()
    {   
        // App.ClassN = (this.classList[0]=="list-item")?"clicked":"active";
        App.ClassN = "active";
        const item = document.querySelectorAll("."+this.classList[0]);

        item.forEach(i=>i.classList.remove(App.ClassN));   

        this.classList.add(App.ClassN); 
    }

    //? show active header menu list
    static Activate_HeaderFooterMenu(class_name,header_name)
    {   
        const list_item = document.querySelectorAll(".list-item");


        list_item.forEach(i=>i.classList.remove("clicked"));   

        list_item.forEach(j=>{
                let list_data = j.dataset.list_data;
                if(list_data==header_name)
                {
                    j.classList.add(class_name);
                }    
        });
        
       
    }

    //?Collection-data-item show hide
    static CollectionShowHide(collection_name)
    {
        const collection_data_item =document.querySelectorAll(".collection-data-item");
        
        collection_data_item.forEach(l=>{

            let collection_data_name = l.dataset.collection_name;
            if(collection_data_name==collection_name || collection_name=="all")
            {
              l.style.display="";
            }
            else
            {
                l.style.display="none";
            }
            
        });

    }

}


// -----------------------------------------------------------------------------------------------------
//*EventListener
//? header menu list-item
const section = document.querySelectorAll("section");

window.addEventListener("scroll",()=>{
   
    let current = "";
    section.forEach(section=>{
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;

        if(window.pageYOffset > (sectionTop - sectionHeight / 10))
        {
            current = section.getAttribute("id");
        }
    });

    App.Activate_HeaderFooterMenu("clicked",current);
});

//?collection menu list-name
const list_names = document.querySelectorAll(".collection .list-name .list-name-item");

list_names.forEach(i=>i.addEventListener("click",App.AddRemoveClass));

//? collection-data-item show hide
list_names.forEach(i=>i.addEventListener("click",(e)=>{

    let collectio_name = e.target.innerText.toLowerCase();
    App.CollectionShowHide(collectio_name);
}));






// --------------------------------------------------------------------------------------------------
//*loading  
//? calling  
Helper.LoadData();
