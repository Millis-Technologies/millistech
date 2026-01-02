#!/usr/bin/env bash

SESSION="millis_tech"
DIR="$HOME/Code/millis_tech/millistech_website"

if tmux has-session -t "$SESSION" 2>/dev/null; then
  echo "Session '$SESSION' already exists."
  exit 0
fi

cd "$DIR"
ddev start

tmux new-session -d -s "$SESSION" -c "$DIR" -n proj

tmux new-window -t "$SESSION:" -c "$DIR" -n claude
tmux send-keys -t "$SESSION:claude" "claude" C-m

tmux new-window -t "$SESSION:" -c "$DIR" -n opencode
tmux send-keys -t "$SESSION:opencode" "opencode" C-m

tmux new-window -t "$SESSION:" -c "$DIR" -n git
tmux send-keys -t "$SESSION:git" "lazygit" C-m

tmux new-window -t "$SESSION:" -c "$DIR" -n npm
tmux send-keys -t "$SESSION:npm" "ddev npm run dev" C-m

tmux select-window -t "$SESSION:proj"
tmux attach -t "$SESSION"

