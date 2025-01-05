# Random Teleporter Plugin for PocketMine

Random Teleporter is a simple yet powerful plugin for PocketMine-MP that allows players to teleport randomly within a world, with the ability to customize the teleportation ranges and enable or disable it in specific worlds.

## Features

- **Random Teleportation:** Teleport anywhere within a defined range of coordinates.
- **World-Specific:** Enable or disable the teleportation feature in specific worlds.
- **Easy Configuration:** Customize teleportation ranges, command names, and messages.

## Requirements

- PocketMine-MP v4.x or later
- PHP 7.4 or later

## Installation

1. Download the plugin.
2. Place the `RandomTeleporter` folder inside the `plugins` directory of your PocketMine server.
3. Restart or reload the server.
4. The plugin should be active and ready to use.

## Configuration

You can customize the plugin behavior by editing the `config.yml` file. Here's an example of a configuration:

### config.yml

```yaml
worlds:
  enabled:
    - world  # List the worlds where random teleportation is allowed

command:
  name: "/rtp"  # Command to trigger random teleportation
  description: "Teleports you to a random location within the enabled world."
  usage_message: "/rtp"  # Message displayed for incorrect usage
  aliases:
    - "randomteleport"  # Aliases for the command

range:
  x:
    - -1000  # Min X range
    - 1000   # Max X range
  z:
    - -1000  # Min Z range
    - 1000   # Max Z range

messages:
  no_permission: "You do not have permission to use this command."
  not_player: "This command can only be used by players."
  disabled_world: "Random teleportation is disabled in the following worlds: {worlds}"
  success: "You have been teleported to coordinates X:{x}, Y:{y}, Z:{z}"
