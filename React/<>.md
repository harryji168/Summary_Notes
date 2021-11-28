
<> Fragments? </>
https://medium.com/@yurachoi/react-js-fragments-175290da6435


https://stackoverflow.com/questions/31284169/parse-error-adjacent-jsx-elements-must-be-wrapped-in-an-enclosing-tag


// WRONG!

return (  
    <Comp1 />
    <Comp2 />
)
Instead:

// Correct

return (
    <div>
       <Comp1 />
       <Comp2 />
    </div>
)
Edit: Per Joe Clay's comment about the Fragments API

// More Correct

return (
    <React.Fragment>
       <Comp1 />
       <Comp2 />
    </React.Fragment>
)

// Short syntax

return (
    <>
       <Comp1 />
       <Comp2 />
    </>
)