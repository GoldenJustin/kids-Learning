 document.addEventListener('DOMContentLoaded', () => {
            const startGameButton = document.getElementById('start-game');
            const checkCompletionButton = document.getElementById('check-completion');
            const puzzleBoard = document.getElementById('puzzle-board');
            const piecesContainer = document.getElementById('pieces');
            const fullImage = document.getElementById('full-image');

            const imageSrc = '{{ asset('assets/img/puzzle.jpg') }}';

            let pieces = [];

            function generatePuzzlePieces() {
                pieces = [];
                for (let i = 0; i < 16; i++) {
                    const piece = document.createElement('div');
                    piece.classList.add('puzzle-piece');
                    piece.style.backgroundImage = `url(${imageSrc})`;
                    piece.style.backgroundPosition = `${-100 * (i % 4)}px ${-100 * Math.floor(i / 4)}px`;
                    piece.setAttribute('draggable', 'true');
                    piece.dataset.index = i;
                    pieces.push(piece);
                }
                shuffleArray(pieces);
            }

            function shuffleArray(array) {
                for (let i = array.length - 1; i > 0; i--) {
                    const j = Math.floor(Math.random() * (i + 1));
                    [array[i], array[j]] = [array[j], array[i]];
                }
            }

            startGameButton.addEventListener('click', () => {
                fullImage.style.display = 'none';
                puzzleBoard.style.display = 'block';
                piecesContainer.style.display = 'flex';
                puzzleBoard.innerHTML = '';
                piecesContainer.innerHTML = '';
                generatePuzzlePieces();
                pieces.forEach(piece => piecesContainer.appendChild(piece));
                enableDragAndDrop();
            });

            function enableDragAndDrop() {
                const puzzlePieces = document.querySelectorAll('.puzzle-piece');
                puzzlePieces.forEach(piece => {
                    piece.addEventListener('dragstart', dragStart);
                    piece.addEventListener('dragover', dragOver);
                    piece.addEventListener('drop', drop);
                });
            }

            function dragStart(event) {
                event.dataTransfer.setData('text/plain', event.target.dataset.index);
            }

            function dragOver(event) {
                event.preventDefault();
            }

            function drop(event) {
                event.preventDefault();
                const draggedIndex = event.dataTransfer.getData('text/plain');
                const droppedIndex = event.target.dataset.index;

                const draggedPiece = document.querySelector(`.puzzle-piece[data-index='${draggedIndex}']`);
                const droppedPiece = document.querySelector(`.puzzle-piece[data-index='${droppedIndex}']`);

                if (draggedPiece && droppedPiece) {
                    const draggedClone = draggedPiece.cloneNode(true);
                    const droppedClone = droppedPiece.cloneNode(true);

                    piecesContainer.replaceChild(draggedClone, droppedPiece);
                    piecesContainer.replaceChild(droppedClone, draggedPiece);

                    enableDragAndDrop();
                }
            }

            checkCompletionButton.addEventListener('click', () => {
                const piecesInBoard = document.querySelectorAll('#pieces .puzzle-piece');
                let isComplete = true;

                piecesInBoard.forEach((piece, index) => {
                    if (parseInt(piece.dataset.index) !== index) {
                        isComplete = false;
                    }
                });

                if (isComplete) {
                    alert('Congratulations! You have completed the puzzle.');
                } else {
                    alert('Puzzle is not complete yet. Keep trying!');
                }
            });
        });