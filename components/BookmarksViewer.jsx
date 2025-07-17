const BookmarksViewer = ({ data, filterMode }) => {

  

    //Search function using da filter
  const prefilteredData = data.filter((curr)=>{
    return curr.title.toLowerCase().includes(filterMode.querySearch.toLowerCase());
  });
  

  //prefiltered data empty print nothing
  if(!prefilteredData || prefilteredData.length === 0){
    let message = `No Results of "${filterMode.querySearch}"...`;

    //change message if database is actually empty
    if(!data || data.length === 0){
      message = "Database is Empty...";
    }
    
    return(
      <div className="BookmarksViewer-mainContainer">
        <div className="BookmarksViewer-emptyWarning">
          <p>{message}</p>
        </div>
      </div>

    );
  }

  console.log(data);

  //sort depending on filterMode.sortmode
  let sortedData = prefilteredData;
  if(filterMode.sortmode == 'r_asc'){
    sortedData = [...prefilteredData].sort((a, b) => b.rating - a.rating);
  }
  else if(filterMode.sortmode == 'r_desc'){
    sortedData = [...prefilteredData].sort((b, a) => b.rating - a.rating);
  }
  else if(filterMode.sortmode == 'a_asc'){
    sortedData = [...prefilteredData].sort((a, b) => a.title.localeCompare(b.title));
  }
  else if(filterMode.sortmode == 'a_desc'){
    sortedData = [...prefilteredData].sort((b, a) => a.title.localeCompare(b.title));
  }




  return (
  <div className="BookmarksViewer-mainContainer">
    {sortedData.map((bookItem)=>{
      return(
          
              <BookMark 
              key = {bookItem.id}
              r_id={bookItem.id}
              r_title={bookItem.title}
              r_imageurl={bookItem.imageurl}
              r_page={bookItem.page}
              r_rating={bookItem.rating}
              />
          
      );
    })}
  </div>
);

  


};
