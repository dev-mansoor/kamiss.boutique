export class Helper{

    static getNameFrom(image)
    {   let removeDot = image.split(".");
        let splittedImgName = removeDot[0].split("-");
        let jointedImagName = `${splittedImgName[0]} ${splittedImgName[1]}`;
    
        return jointedImagName;
    }

    static LoadData()
    { 
      fetch("load-pic.php",{
        method: "POST",
        headers : { 
            'Content-Type': 'application/json',
           }
      })
      .then(response=>response.json())
      .then(data=>{
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
    
                let imgContent = Helper.getNameFrom(setimage);
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
            }
        }
        Helper.DialogEvent();
      })
    }
    
    //? show dailog
    static DialogEvent()
    {
        const view_btn = document.querySelectorAll(".view");
        // const clothe_frame = document.querySelectorAll(".clothe");
        // clothe_frame.forEach(i=>{
            
        //     i.addEventListener("click",()=>{
                
        //         const data = i.querySelector(".clothe-header img").dataset;
        //         let data_temp = Object.values(data);

        //         let [name,size,s,m,l,xl,xxl] = Helper.getDataSet(data_temp);
        //         let i_name = name.split(",")
        //         console.log(i_name)
        //     })
        // });

        view_btn.forEach(i=>{
            i.addEventListener("click",(e)=>{
                const data = i.parentElement.parentElement.children[0].dataset;
                let data_temp = Object.values(data);
                let [name,size,s,m,l,xl,xxl] = Helper.getDataSet(data_temp);
                let i_name = name.split(",");
                console.log(name,size,s,m,l,xl,xxl);
            })

        });
        
       
    }

    static getDataSet(arr)
    {
        let new_arr=[];
        arr.forEach(i=>{
            new_arr.push(i);
        })
    
        return new_arr;
    }
}