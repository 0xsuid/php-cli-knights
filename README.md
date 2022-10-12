# PHP CLI Knights

- A very simple Knights game implemented in PHP.

## Knights Game

- any number of knights in a circle
- each knight has the same number of life points (e.g. 100)
- the game runs in turn:
- each player rolls a dice (d6); the number rolled is subtracted from the next player's life points
- then it is the next player's turn
- knight die if their life points <= 0
- dead knights are removed from the field
- the game is over when only one knight is left on the field

**Notes**: no interaction (input), the game should play itself in a loop.

**Output**: the knight, who won the game
