const Filter = ({filterMode, setFilterMode})=>{

    function handleQueryChange(event){
        setFilterMode(()=>{
            return{
                ...filterMode,
                querySearch: event.target.value
            }
        });
    }

    function handleSortChange(x){
        setFilterMode(()=>{
            return {
                ...filterMode,
                sortmode: x
            }
        });
    }


    return (<>
    
    <div className="filterContainer">
        <p className="filtersText">ORGANIZE</p>
        
            <input
                className= "filterContainer-textInput"
                type="text"
                placeholder="Search..."
                value = {filterMode.querySearch}
                onChange={handleQueryChange}
            ></input>
       

        <div className="RatingContainer">
            <p className="ratingText">By Rating</p>
                <div className="RatingContainerButtons">
                    <button 
                    className={`r_asc ${filterMode.sortmode == 'r_asc'
                        ? 'selected'
                        : ''
                    }`}

                        onClick = {()=>{
                            handleSortChange('r_asc')
                        }}
                    >Asc</button>

                    <button className={`r_desc ${filterMode.sortmode == 'r_desc'
                        ? 'selected'
                        : ''
                    }`}
                        onClick = {()=>{
                            handleSortChange('r_desc')
                        }}
                    >Desc</button>
                </div>
        </div>


        <div className="AlphaContainer">
            <p className="alphaText">By Letter</p>
                <div className="alphaContainerButtons">
                    <button className={`a_asc ${filterMode.sortmode == 'a_asc'
                        ? 'selected'
                        : ''
                    }`}
                        onClick = {()=>{
                            handleSortChange('a_asc')
                        }}
                    >Asc</button>

                    <button className={`a_desc ${filterMode.sortmode == 'a_desc'
                        ? 'selected'
                        : ''
                    }`}
                        onClick = {()=>{
                            handleSortChange('a_desc')
                        }}
                    >Desc</button>
                </div>
        </div>

    </div>
        
    
    </>);
}