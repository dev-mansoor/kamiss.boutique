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


function getNameFrom(image)
{   let removeDot = image.split(".");
    let splittedImgName = removeDot[0].split("-");
    let jointedImagName = `${splittedImgName[0]} ${splittedImgName[1]}`;

    return jointedImagName;
}
function LoadPic()
{ 
  fetch("load-pic.php",{
    method:"POST"
    
  })
  .then(response=>response.json())
  .then((data)=>{
    // data = data.trim(); // remove the unwanted whitespace
    // const result = JSON.parse(data);
    console.log(data);

    document.getElementById("collection_data").innerHTML="";
    const key_length = Object.keys(data).length;
    const key_names = Object.keys(data);

    let collection_data_items = "";
    let content = "";

    for(let keys=0; keys<key_length; keys++)
    {
        let title_name = key_names[keys];
        var images = data[title_name][1]["image_name"].split(",");
        var setimage = `img/${images[0].toString()}`;
        collection_data_items = ` <div class="collection-data-item ${title_name}-collection" id="${title_name}_collection" data-collection_name="${title_name}">
                                      <!-- heading -->
                                      <div class="collection-data-item-heading">
                                          <div class="image"><img src="${setimage}" alt="collection heading image"></div>
                                          <h6 class="sub-title">${title_name.toUpperCase()} COLLECTION</h6>
                                      </div>
                                      <!-- content -->
                                      <div class="collection-data-item-content" id="${title_name}_content">
                                      </div>
                                    </div>`;
        document.getElementById("collection_data").innerHTML+=collection_data_items;
        for(let i=1; i<=Object.keys(data[title_name]).length; i++)
        {
            let images = data[title_name][i]["image_name"].split(",");
            let size_list = data[title_name][i]["size"];
            let sizes ={
                S:data[title_name][i]["S"],
                M:data[title_name][i]["M"],
                L:data[title_name][i]["L"],
                XL:data[title_name][i]["XL"],
                XXL:data[title_name][i]["XXL"]
            }
            
            let setimage = images[0].toString();
            let setimage_data = images.toString();

            let imgContent = getNameFrom(setimage);
            let imgSrc = `img/${setimage}`;
            let otherImgData =`${setimage_data}`;

            let content_name = `${title_name}_content`;
            

            // if(title_name=="new")
            // {
                content += `<div class="clothe">
                                    <div class="clothe-header">
                                        <img src="${imgSrc}" alt="${title_name} collections" 
                                        data-all_images="${otherImgData}" 
                                        data-size_list="${size_list}" 
                                        data-S="${sizes.S}" 
                                        data-M="${sizes.M}"
                                        data-L="${sizes.L}"
                                        data-XL="${sizes.XL}"
                                        data-XXL="${sizes.XXL}">
                                        <div class="layer-over-image">
                                            <button class="view" id="view">VIEW</button>
                                        </div>
                                    </div>
                                    <div class="clothe-fotter">
                                        <h6>${title_name} Collection</h6>
                                        <p>${imgContent}</p>
                                    </div>
                                </div>`;
            

            if(i==Object.keys(data[title_name]).length)
            {
                document.getElementById(content_name).innerHTML =content;
                content="";
            }
            // }
            // if(title_name=="afghani")
            // {
            //     afghani_content += `<div class="clothe">
            //                         <div class="clothe-header">
            //                             <img src="${imgSrc}" alt="${title_name} collections" data_otherImgData="${otherImgData}">
            //                             <div class="layer-over-image">
            //                                 <button class="view" id="view">VIEW</button>
            //                             </div>
            //                         </div>
            //                         <div class="clothe-fotter">
            //                             <h6>${title_name} Collection</h6>
            //                             <p>${imgContent}</p>
            //                         </div>
            //                     </div>`;
            // }
            // if(title_name=="punjabi")
            // {
            //     punjabi_content += `<div class="clothe">
            //                         <div class="clothe-header">
            //                             <img src="${imgSrc}" alt="${title_name} collections" data_otherImgData="${otherImgData}">
            //                             <div class="layer-over-image">
            //                                 <button class="view" id="view">VIEW</button>
            //                             </div>
            //                         </div>
            //                         <div class="clothe-fotter">
            //                             <h6>${title_name} Collection</h6>
            //                             <p>${imgContent}</p>
            //                         </div>
            //                     </div>`;
            // }
            // if(title_name=="shoes")
            // {
            //     shoes_content += `<div class="clothe">
            //                         <div class="clothe-header">
            //                             <img src="${imgSrc}" alt="${title_name} collections" data_otherImgData="${otherImgData}">
            //                             <div class="layer-over-image">
            //                                 <button class="view" id="view">VIEW</button>
            //                             </div>
            //                         </div>
            //                         <div class="clothe-fotter">
            //                             <h6>${title_name} Collection</h6>
            //                             <p>${imgContent}</p>
            //                         </div>
            //                     </div>`;
            // }
            
        }
    }

    // document.getElementById("collection_data").innerHTML =collection_data_items;
    // document.getElementById("new_content").innerHTML =new_content;
    // document.getElementById("afghani_content").innerHTML =afghani_content;
    // document.getElementById("punjabi_content").innerHTML =punjabi_content;
    // document.getElementById("shoes_content").innerHTML =shoes_content;
    
   
  })
}

LoadPic();
