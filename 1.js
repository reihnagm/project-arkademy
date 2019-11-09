biodata("Reihan Agam", 20)

function biodata(string, number)
{
	const biodata =  
    {
    	name: string, 
      	umur: number, 
      	address: "Jl Madrasah No 80, Pangkalan Jati, Cinere.",
        hobbies: ["maen game", "ngoding", "nonton anime"],
      	is_married: false,
        list_school: 
      	[{
          name: "SMK Salafiyah Syafi'iyyah",
          year_in: "2015",
          year_out: "2018",
          major: "computer engineering"
        }],
       skills: 
      	[{
            skill_name: "php",
            level: "advanced"
        },{
		    skill_name: "codeigniter",
            level: "advanced"
        },{
            skill_name: "laravel",
            level: "advanced"
        },
         {
            skill_name: "javascript",
            level: "advanced"
        },
        {
            skill_name: "jquery",
            level: "advanced"
        }
        ],
        interest_in_coding: true
    } 
 	console.log(biodata)
}