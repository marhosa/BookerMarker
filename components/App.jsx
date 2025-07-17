const App = ({bookmarks}) => {
  
  //useState for realtime filtering
  const [filterMode, setFilterMode] = React.useState({
          querySearch: '',
          sortmode: 'r_asc'
        }); 
  
  
  
  return (
    <>
        <div className = "mainDiv">
            <div className="buttonContainers">
                <AddButton />
                <Filter 
                  filterMode={filterMode}
                  setFilterMode={setFilterMode}
                />
            </div>
            <BookmarksViewer 
            data={bookmarks}
            filterMode={filterMode}
          />
        </div>
        
    </>
  );
};



